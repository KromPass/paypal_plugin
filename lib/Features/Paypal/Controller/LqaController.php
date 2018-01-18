<?php

namespace Features\Paypal\Controller;

use API\V2\Validators\JobPasswordValidator;
use API\V2\Validators\LoginValidator;
use Features\Paypal\Controller\API\Validators\TranslatorsWhitelistAccessValidator;
use Features\Paypal\Decorator\LqaDecorator;
use Jobs_JobStruct;
use PHPTALWithAppend;
use Projects_ProjectStruct;

class LqaController extends \BaseKleinViewController {

    /**
     * @var \PHPTALWithAppend ;
     */
    protected $view;

    /**
     * @var Jobs_JobStruct
     */
    protected $jobStruct;

    /**
     * @var Projects_ProjectStruct
     */
    protected $project;

    /**
     * @param Projects_ProjectStruct $project
     */
    public function setProject( Projects_ProjectStruct $project ) {
        $this->project = $project;
    }

    /**
     * @return Projects_ProjectStruct
     */
    public function getProject() {
        return $this->project;
    }

    /**
     * @param Jobs_JobStruct $jobStruct
     */
    public function setJobStruct( Jobs_JobStruct $jobStruct ) {
        $this->jobStruct = $jobStruct;
    }

    public function afterConstruct() {
        $this->appendValidator( new LoginValidator( $this ) );
        $jobValidator = new JobPasswordValidator( $this );
        $Controller = $this;
        $jobValidator->onSuccess( function() use( $jobValidator, $Controller ){
            $Controller->setJobStruct( $jobValidator->getJob() );
            $Controller->setProject( $jobValidator->getJob()->getProject( 60 * 60 ) );
        } );
        $this->appendValidator( $jobValidator );
        $this->appendValidator( new TranslatorsWhitelistAccessValidator( $this ) );
    }

    public function setView( $template_name ) {
        $this->view = new PHPTALWithAppend( $template_name );
    }

    /**
     * @param $method
     */
    public function respond( $method = null ) {
        $decorator = new LqaDecorator( $this );
        $this->setDefaultTemplateData();
        $decorator->decorate( $this->view );
        $this->response->body( $this->view->execute() );
        $this->response->send();
    }


}
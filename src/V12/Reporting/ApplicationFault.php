<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the base object from which all fault detail objects derive.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/applicationfault?view=bingads-12 ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

}

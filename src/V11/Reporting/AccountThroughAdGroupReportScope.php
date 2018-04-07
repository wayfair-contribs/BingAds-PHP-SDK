<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the set of accounts, campaigns, and ad groups to include in the report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/accountthroughadgroupreportscope?view=bingads-11 AccountThroughAdGroupReportScope Data Object
     * 
     * @uses AdGroupReportScope
     * @uses CampaignReportScope
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderAudienceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by AudiencePerformanceReportRequest
     * @used-by CallDetailReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by DSAAutoTargetPerformanceReportRequest
     * @used-by DSACategoryPerformanceReportRequest
     * @used-by DSASearchQueryPerformanceReportRequest
     * @used-by GeographicPerformanceReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by NegativeKeywordConflictReportRequest
     * @used-by ProductDimensionPerformanceReportRequest
     * @used-by ProductMatchCountReportRequest
     * @used-by ProductPartitionPerformanceReportRequest
     * @used-by ProductPartitionUnitPerformanceReportRequest
     * @used-by ProductSearchQueryPerformanceReportRequest
     * @used-by ProfessionalDemographicsAudienceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by SearchCampaignChangeHistoryReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by UserLocationPerformanceReportRequest
     */
    final class AccountThroughAdGroupReportScope
    {
        /**
         * An array of account identifiers that identifies the account data to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * An array of AdGroupReportScope objects that identifies the ad group data to include in the report.
         * @var AdGroupReportScope[]
         */
        public $AdGroups;

        /**
         * An array of CampaignReportScope objects that identifies the campaign data to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

}

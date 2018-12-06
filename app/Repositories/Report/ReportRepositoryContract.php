<?php
namespace App\Repositories\Report;

interface ReportRepositoryContract
{
     public function getAllReports();

     public function getLimitedReport();

     public function getPopularReport();

     public function getLatestReport();

     public function getUpcomingReport();

     public function reportDetail($id);

     public function reportDescription($id);

     public function reportToc($id);


     //Searchbar on homepage
     public function searchReport($request, $query);


        //report search with category
	  public function categorySearchReport($request, $query, $category);
	     
	     //report search with category and price
	  public function priceSearchReport($request, $query, $category, $min, $max);

	     //search by only price
	  public function onlyPriceSearchReport($request, $query, $min, $max);

	     //advanced search report
	  public function advancedSearchReport($request, $query);

	  //on advanced search page
 	  public function showLatestReport();


}

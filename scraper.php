<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
//  https://e.fbr.gov.pk/Registration/searchDetail.aspx?rand=0.6987121410114072&crup=6299999
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
for($page = 1; $page <5; $page++)
{
    $link = 'https://e.fbr.gov.pk/Registration/searchDetail.aspx?rand=0.6987121410114072&crup='.$page;
    $NEWLINK    =   file_get_html($link);
    echo $NEWLINK;
}
//
// // Read in a page
// $html = scraperwiki::scrape("http://foo.com");
//
// // Find something on the page using css selectors
// $dom = new simple_html_dom();
// $dom->load($html);
// print_r($dom->find("table.list"));
//
// // Write out to the sqlite database using scraperwiki library
// scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>

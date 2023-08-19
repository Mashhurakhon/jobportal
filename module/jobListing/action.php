<?php
if (isset($_GET['action']) && !empty($_GET['action']))
{
    $action = $_GET['action'];

    // index
    if ($action == "findJobs")
    {
        require_once("findJobs.php");
    }
    // job_listing
    if ($action == "")
    {
        require_once("module/jobListing/filterJobs/jobContent.php");
    }
}
?>
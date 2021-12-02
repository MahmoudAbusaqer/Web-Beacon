# Web-Beacon
## Overview

A web beacon/web bug is a technique used on web pages and email to unobtrusively (usually invisibly) allow checking that a user has accessed some content.

 Web beacons are typically used by third parties to monitor the activity of users at a website for the purpose of web analytics or page tagging.

## What it does
Each of the applications does have a web bug that is placed in the second application. When the first application is invoked, it will locate the web bug from the second which will record the time of the request, the IP address the call is coming from, and the URL of the web bug.


Project 1: page 1 will invoked the web bug from page 2 in project 2, and on page 2 it will store in the database the time, IP, and URL of page 1 which the client used and will print all the result in a table in page 2.

Project 2: page 1 will invoked the web bug from page 2 in project 1, and on page 2 it will store in the database the time, IP, and URL of page 1 which the client used and will print all the result in a table in page 2.


Project 1, page 1:

https://web-bug.000webhostapp.com/project1/page1.html

Project 1, page 2:

https://web-bug.000webhostapp.com/project1/page2.php


Project 2, page 1:

https://web-bug.000webhostapp.com/project2/page1.html

Project 2, page 2:

https://web-bug.000webhostapp.com/project2/page2.php


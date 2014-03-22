Sample Project
==============
PHP + MySQL + RainTPL + Twitter Bootstrap 3
-------------------------------------------

This is a sample project to get up and running quickly with
Twitter Bootstrap 3 + RainTPL for Front-End and PHP on the backend.
This is designed to be run on an Apache server with a MySQL server

###Setup
To run this on your local machine, download XAMPP. It has a folder called
'htdocs' (hypertext docs, if you were wondering) which is the public folder
of the server (it tries to serve pages relative to this folder as well).

So extract the repo to there, up to you whether you want it to be in the 'sample-project'
folder or just sitting bare in the htdocs folder.

If you want it 'htdocs/sample-project/all-the-files-go-here' which means that you see 
it in your browser as 'localhost/sample-project/all-the-files', then do a standard git clone:
```
git clone git@github.com:tomtomau/sample-project.git
```

If you would rather it 'htdocs/all-the-files-go-here' which means you see it in the 
browser as 'localhost/all-the-files', then you can clone into a specific directory:
```
git clone git@github.com:tomtomau/sample-project.git .
```
By putting the period at the end it clones to this folder here, so make sure you cd to the htdocs
folder in Git Bash.
# mvcframework
This is a MVC framework written in PHP. It will serve as a skeleton for any future MVC projects

## App structure           
├─ app                   
│  ├─ config             
│  │  └─ config.php      
│  ├─ controllers        
│  │  └─ Pages.php       
│  ├─ helpers            
│  ├─ lib                
│  │  ├─ Controller.php  
│  │  ├─ Core.php        
│  │  └─ Database.php    
│  ├─ models             
│  │  └─ User.php        
│  ├─ views              
│  │  └─ pages           
│  │     ├─ about.php    
│  │     └─ index.php    
│  └─ require.php        
├─ public                
│  ├─ css                
│  ├─ img                
│  ├─ js                 
│  └─ index.php          
├─ mvc.sql               
└─ README.md             

## Procedure to construct the app from scratch
- The MVC application is broken down into 2 folders **app** and **public**.
- There are 3 **.htaccess** files written in the entire app, 1 nested inside the app folder, 1 nested in the public folder and 1 overhead **.htaccess** file which is outside the **app** and **public** folders.

## APP folder
- The app folder serves as the 'back-end' structure which houses the configuration, controllers, libraries, models, views and the require.php file which acts a bootstrap file that holds everything else.

## PUBLIC folder
- The public folder serves as the 'front-end' structure which serves renders the views and data to the end-user.
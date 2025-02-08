# Kata Tolls and Vehicles
In this project it is required to develop a program that models a toll system. In which data on both tolls and vehicles are stored, as well as the relationships between them.Designed with [Laravel](https://laravel.com) framework. 

## 👀 Views

![Captura de pantalla 2025-02-08 120420](https://github.com/user-attachments/assets/7959b24a-69a7-4f30-9f7e-2ce1e839e2e8)
*Home View*

![Captura de pantalla 2025-02-08 120409](https://github.com/user-attachments/assets/42dc5a66-b998-4047-8606-49eed0cdfd4d)
*Tolls View*

![Captura de pantalla 2025-02-08 120346](https://github.com/user-attachments/assets/7b451383-ca98-417c-a902-89a87f589734)
*Vehicles View*

## 💻 Languages ​​and tools  
![](https://skillicons.dev/icons?i=html,css,php,laravel,git,github,vscode,)

## ⚙️ Installation prerequisites
🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛠️ Installation Guide 
0️⃣ Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `toll` 

1️⃣ Open a terminal in the folder where you want the repository to be cloned and enter this command:

`https://github.com/rebecabernal/PeajeKata.git`

2️⃣ As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

![image](https://github.com/user-attachments/assets/fcf2231b-cd02-42de-9922-c45e4485aa2a)

2️⃣ In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    `npm install` `npm run build`
    
▷Console 2:
    `composer install` `composer run dev`
    
▷Console 3: 
    `php artisan migrat:fresh`
    `php artisan migrat:fresh --seed`
    
3️⃣ In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the offers are located.

⚠️ If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

`php artisan key:generate` `php artisan config:cache` 

## 🌐 Endpoints 
For this project, there are 2 endpoints for adding vehicles and tolls. And another one to make a vehicle pass through the toll. For the 2 first you'll need to introduce via postman this json schema to enter the data.

### 🏍️ Create Vehicle (POST)
`http://127.0.0.1:8000/api/vehicles`

![Captura de pantalla 2025-02-08 122218](https://github.com/user-attachments/assets/f63462c4-6cc2-4204-af69-60e56a678c42)

### 🛣️ Create Toll (POST)
`http://127.0.0.1:8000/api/toll`

![image](https://github.com/user-attachments/assets/6d42546e-752c-4383-95eb-29a55292ca9d)

### 🚚 Pass Through Toll 🛣️ (PUT)
`http://127.0.0.1:8000/api/vehicles/id/tolls/id`

## 🧪 Tests 
All tests passed. Introduce this line on your console to check it:

`./vendor/bin/phpunit tests`

If you want to launch the tests and view them you can put this command in console 3:

`php artisan test --coverage` 


## 🛠️ Jira Backlog 

![image](https://github.com/user-attachments/assets/027cc651-7ac3-43e3-aaa3-238b297e7532)

## 🗂️ BBDD Schema

![image](https://github.com/user-attachments/assets/9379ef24-19d9-484d-b8ab-e9a683b8ec59)


## 👩‍💻  My contact

📧rebecabernalmesa@gmail.com

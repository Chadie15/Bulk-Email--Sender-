Purpose

The primary goal of this application is to reduce the hassle and time involved in crafting personalized marketing emails. By allowing users to input a single heading and subject, and then customize the message body with specific company names, this application streamlines the email marketing process. 

▎Features

• Single Heading and Subject: Enter your email's heading and subject just once for the entire campaign.

• Personalized Message Body: Utilize placeholders in your message body (e.g., {{company_name}}) to automatically insert company-specific information.

• Excel Sheet Upload: Easily upload an Excel sheet containing company emails and corresponding names, making it convenient to manage your contact list.

• Bulk Email Sending: Send out your marketing message to all listed companies in one go, saving you valuable time.

• User-Friendly Interface: Designed for ease of use, ensuring that anyone can navigate and utilize the application effectively.

▎Installation

To set up the Bulk Email Sender Application on your local machine, follow these steps:

1. Clone the Repository:
   
Bash

   git clone https://github.com/yourusername/bulk-email-sender.git
   cd bulk-email-sender
   

2. Install Dependencies:
   Ensure you have Composer installed, then run:
   
Bash

   composer install
   

3. Set Up Environment Variables:
   Copy the .env.example file to .env and configure your email settings:
   
Bash

   cp .env.example .env
   
   Update the .env file with your mail server credentials.

4. Generate Application Key:
   Run the following command to generate your application key:
   
Bash

   php artisan key:generate
   

5. Run Migrations (if applicable):
   If your application uses a database, run:
   
Bash

   php artisan migrate
   

6. Start the Development Server:
   You can start the Laravel development server using:
   
Bash

   php artisan serve
   
   Access your application at http://localhost:8000.

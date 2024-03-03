<h1 align='center'>Job Board</h1>
<h3 >About</h3>
<p> Job Board aims to streamline the process of finding job opportunities and staying updated on the latest job listings. It leverages Laravel's powerful features to provide a smooth user experience while ensuring efficient data handling and notification delivery. With its simple installation process and intuitive interface, Job Board is designed to meet the needs of job seekers specially for php stack.</p>

<h3 >Features</h3>
<li >Job Listings: The project fetches job listings from an external API using the Job class and queue.
</li>
<li >Email Subscription: Users can subscribe to receive job notifications via email.</li>
<li >Email Notification Queue: Email notifications are sent to MailerLite using a queue job for efficient processing.</li>
<li >Caching: The index and single pages of job listings are cached to improve performance and reduce database queries.</li>


<h3 >Installation:</h3>
<p> To install the Job Board project, follow these steps:</p>

<li >Clone the repository to your local machine:</li>
<code>
git clone https://github.com/imabulhasan99/job-board.git
</code>
<li >Navigate to the project directory:</li>
<code>
cd job-board
</code>
<li >Install composer dependencies:</li>
<code>
composer install
</code>
<li >Copy the .env.example file to .env:</li>
<code>
cp .env.example .env
</code>
<li >Add these two key to your .env:</li>
<code>
MAILERLITE_API_KEY,
JOB_API_KEY
</code>
<li >Run database migrations:</li>
<code>
php artisan migrate
</code>
<li >Start the Laravel development server:</li>
<code>
php artisan serve
</code>
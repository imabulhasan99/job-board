<h1 align='center'>Job Board</h1>
<h3 align='center'>About</h3>
<p align ='center'> Job Board aims to streamline the process of finding job opportunities and staying updated on the latest job listings. It leverages Laravel's powerful features to provide a smooth user experience while ensuring efficient data handling and notification delivery. With its simple installation process and intuitive interface, Job Board is designed to meet the needs of job seekers specially for php stack.</p>

<h3 align='center'>Features</h3>
<li align='center'>Job Listings: The project fetches job listings from an external API using the Job class and queue.
</li>
<li align='center'>Email Subscription: Users can subscribe to receive job notifications via email.</li>
<li align='center'>Email Notification Queue: Email notifications are sent to MailerLite using a queue job for efficient processing.</li>
<li align='center'>Caching: The index and single pages of job listings are cached to improve performance and reduce database queries.</li>


<h3 align='center'>Installation:</h3>
<p align ='center'> To install the Job Board project, follow these steps:</p>

<li align='center'>Clone the repository to your local machine:</li>
<code>
git clone https://github.com/imabulhasan99/job-board.git
</code>
<li align='center'>Navigate to the project directory:</li>
<code>
cd job-board
</code>
<li align='center'>Install composer dependencies:</li>
<code>
composer install
</code>
<li align='center'>Copy the .env.example file to .env:</li>
<code>
cp .env.example .env
</code>
<li align='center'>Add these two key to your .env:</li>
<code>
MAILERLITE_API_KEY,
JOB_API_KEY
</code>
<li align='center'>Run database migrations:</li>
<code>
php artisan migrate
</code>
<li align='center'>Start the Laravel development server:</li>
<code>
php artisan serve
</code>
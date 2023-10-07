CREATE DATABASE sehatghar_db;

USE sehatghar_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE website_content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section VARCHAR(255) NOT NULL UNIQUE,
    heading TEXT NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE featured_in_logos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    logo_url VARCHAR(255) NOT NULL,
    alt_text VARCHAR(255) NOT NULL
);

INSERT INTO users (name, email, password)
VALUES
    ('John Doe', 'john@example.com', 'hashed_password_here'),
    ('Alice Smith', 'alice@example.com', 'hashed_password_here');

INSERT INTO website_content (section, heading, description)
VALUES
    ('hero', 'A healthy meal delivered to your door, every single day', 'The smart 365-days-per-year food subscription that will make you eat healthy again. Tailored to your personal tastes and nutritional needs. We have delivered 250,000+ meals last year!'),
    ('how', 'Your daily dose of health in 3 simple steps', 'Never again waste time thinking about what to eat! Omnifood AI will create a 100% personalized weekly meal plan just for you. It makes sure you get all the nutrients and vitamins you need, no matter what diet you follow!'),
    ('meals', 'Sehat Ghar chooses from 100+ recipes', 'Works with any diet: Vegetarian, Vegan, Pescatarian, Gluten-free, Lactose-free, Keto, Paleo, Low FODMAP, Kid-friendly'),
    ('pricing', 'Eating well and healthy without breaking the bank', 'Prices include all applicable taxes. Users can cancel at any time. Both plans include the following.');


INSERT INTO featured_in_logos (logo_url, alt_text)
VALUES
    ('/project/content/img/logos/logo1.1.webp', 'India Today Group'),
    ('/project/content/img/logos/lgo1.2.jpg', 'India Today Group'),
    ('/project/content/img/logos/logo1.3.png', 'India Today Group'),
    ('/project/content/img/logos/business-insider.png', 'Business Insider'),
    ('/project/content/img/logos/techcrunch.png', 'TechCrunch');

INSERT INTO testimonials (image_url, testimonial_text, author)
VALUES
    ('/project/content/img/customers/9.jpg', 'Inexpensive, healthy and great-tasting meals, without even having to order manually! It feels truly magical', 'Rajat Singh'),
    ('/project/content/img/customers/8.jpg', 'The site is crazy good, it chooses the right meals for me every time. It\'s amazing not to worry about food anymore', 'Nikhil Srivastava'),
    ('/project/content/img/customers/7.jpg', 'This place is a lifesaver! I just started a company, so there\'s no time for cooking. I couldn\'t live without my daily meals now', 'Harnoor Singh'),
    ('/project/content/img/customers/6.jpg', 'I got the website for the whole family, and it frees up so much time! Plus, everything is organic and vegan and without plastic', 'Rishabh Roy');


INSERT INTO meals (image_url, tags, title, calories, nutriscore, rating)
VALUES
    ('/project/content/img/meals/meal-1.jpg', 'Vegetarian', 'American Susie', 650, 74, 4.9),
    ('/project/content/img/meals/meal-2.jpg', 'Vegan, Paleo', 'Avocado Salad', 400, 92, 4.8),
    ('/project/content/img/meals/meal-3.jpg', 'Pescatarian', 'Mediterranean Delight', 550, 80, 4.5),
    ('/project/content/img/meals/meal-4.jpg', 'Gluten-free, Vegan', 'Green Goddess Bowl', 420, 95, 4.7),
    ('/project/content/img/meals/meal-5.jpg', 'Keto, Low FODMAP', 'Keto Power Bowl', 480, 88, 4.6);


INSERT INTO gallery_images (image_url)
VALUES
    ('/project/content/img/gallery/gallery-1.jpg'),
    ('/project/content/img/gallery/gallery-2.jpg'),
    ('/project/content/img/gallery/gallery-3.jpg'),
    ('/project/content/img/gallery/15.jpeg'),
    ('/project/content/img/gallery/22.webp'),
    ('/project/content/img/gallery/23.webp'),
    ('/project/content/img/gallery/24.jpeg'),
    ('/project/content/img/gallery/2.jpg'),
    ('/project/content/img/gallery/26.webp'),
    ('/project/content/img/gallery/3.jpg'),
    ('/project/content/img/gallery/4.jpg'),
    ('/project/content/img/gallery/6.jpg');

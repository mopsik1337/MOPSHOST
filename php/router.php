<?php
// Index page
get('/', 'index.php');

// Contact us page
get('/contact-us', 'contact-us.php');

// All products
get('/products', 'products.php');

// Products for children
get('/children', 'children-products.php');

// Male or female products
// $gender could be male or female
get('/products/$gender', 'products.php');

// Signup
post('/signup', 'signup.php');

// Login
post('/login', 'login.php');
?>
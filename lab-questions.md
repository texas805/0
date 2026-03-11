## Web Technologies Lab – Question Sheet

---

### Lab 1 – Basic HTML Page Layout

Create a basic HTML webpage containing the following sections:

- **Header**
- **Main content section**
- **Footer**

Requirements:

- **Display** a welcome message in the content section.
- **Create** a news list using an unordered list (`<ul>`).
- **Add** hyperlinks to external news websites.
- **Style** the page using an external CSS file.

---

### Lab 2 – HTML Form

Design a form page using HTML.

Include the following form fields:

- **Text fields**
- **Radio buttons**
- **Checkboxes**
- **Dropdown selection**

Requirements:

- **Add** a submit button.
- **Apply** CSS styling to the form.

---

### Lab 3 – HTML Form Validation

Write an HTML script for creating a form containing:

- **Text box** for username
- **Password** field
- **Checkboxes** for education fields

Write a JavaScript validation function with the following rules:

- **All fields are required.**
- **Username** length must be at least 4 characters.
- **Password** should start with a digit and end with `#`.

---

### Lab 4 – Country and Capital Selector

Create an HTML page that contains:

- A **selection box** with 5 countries.

Requirement:

- When a user selects a country, its **capital** should be displayed next to the list.

Add CSS styling for the capital:

- **Color**
- **Bold text**
- **Font size**

---

### Lab 5 – Website Layout using HTML & CSS

Design a webpage layout with the following structure:

- **Header** with logo and contact section
- **Navigation menu**
- **Sidebar**
- **Main content area**

Requirements:

- **Implement** the navigation bar using an unordered list.
- **Apply** CSS styling for layout and alignment.
- **Create** a two-column layout using CSS.

---

### Lab 6 – Images and Styling

Create a webpage that displays images inside the page.

Requirements:

- **Use** CSS to style images and page content.
- **Organize** images in a structured layout.
- **Apply** styling such as borders, margins, and padding.

---

### Lab 7 – CSS Stylesheets

Develop and demonstrate the usage of CSS stylesheets.

Use the following types of CSS:

- **Inline CSS**
- **Internal CSS**
- **External CSS**

Design a webpage that:

- Uses different **font styles**.
- Controls background images using `background-repeat` and `no-repeat`.
- Defines styles for links:
  - `a:link`
  - `a:hover`
  - `a:visited`
  - `a:active`

---

### Lab 8 – Introduction to JavaScript

Create an HTML page that loads an external JavaScript file.

Tasks:

- **Display** JavaScript dialog boxes:
  - `alert()`
  - `confirm()`
  - `prompt()`
- **Write** a script that:
  - Changes the color of the page title on mouse events.
  - Modifies list items dynamically using JavaScript.
- **Use** DOM methods:
  - `getElementById()`
  - `getElementsByClassName()`
  - `getElementsByTagName()`

---

### Lab 9 – JavaScript Popup Boxes

Develop and demonstrate JavaScript popup boxes and functions for the following:

1. **Display current date**
   - Create a **"Display Date"** button using `onclick()`.
   - Output: Display the **current date** in a textbox.

2. **Factorial of a number**
   - Input: Take a number using `prompt()`.
   - Output: Display the **factorial** using `alert()`.

3. **Multiplication table**
   - Input: Take a number using `prompt()`.
   - Output: Display the **multiplication table** for that number.

---

### Lab 10 – JavaScript Event Handling

Create an interactive webpage using JavaScript events.

Requirements:

- **Implement** mouse events such as:
  - `mouseenter`
  - `mouseleave`
- **Attach** event listeners using JavaScript.
- **Change** styles or content dynamically when events occur.

---

### Lab 11 – Dynamic Page Manipulation with JavaScript

Create a webpage containing a table with numbers.

Requirements:

- **Implement** a button labeled **"Draw Numbers"**.
- When the button is clicked:
  - **Generate** random numbers.
  - **Replace** the numbers inside the table cells dynamically.
- **Use** JavaScript DOM manipulation to update the page content.

---

### Lab 12 – Registration Page Validation

Write JavaScript validation for a registration page with the following conditions.

**First Name**

- Must contain only alphabets.
- Minimum length 6 characters.

**Password**

- Minimum length 6 characters.

**Email ID**

- Must follow a valid email format.

**Phone Number**

- Must contain only digits.

---

### Lab 13 – Number to Words Converter

Create an HTML page with JavaScript that:

- Accepts a number from **0 to 999**.
- Converts the number into **words**.

Validation rules:

- Should **not** accept numbers ≥ 1000.
- Should **not** accept alphabets.
- Should **not** accept special characters.

---

### Lab 14 – jQuery Hide and Show

Write a jQuery program to:

- **Hide** and **show** HTML elements.

Use:

- `hide()` method
- `show()` method

---

### Lab 15 – AJAX

Create a webpage that loads data asynchronously using AJAX.

Requirements:

- **Implement** a **"Get Data"** button.
- **Use** `XMLHttpRequest` or `fetch()` to request XML data.
- **Parse** the XML response.
- **Display** the retrieved data inside the webpage **without refreshing** the page.

---

### Lab 16 – JavaScript Cookies and Local Storage

Create a webpage that remembers a user's preference using JavaScript.

Requirements:

- Provide controls to let the user choose a **theme** (e.g., light/dark) or **font size**.
- Use **cookies** (`document.cookie`) or **localStorage** to store the user's preference.
- When the page loads:
  - **Read** the stored value.
  - **Apply** the saved theme or font size automatically.
- Provide a button to **reset/clear** the stored preference.

---

### Lab 17 – PHP Basics

Write PHP scripts for the following tasks:

- **Generate** dynamic HTML content using PHP.
- **Use** loops in PHP to generate a multiplication table.
- **Implement** a Rock–Paper–Scissors game using PHP:
  - Use `$_GET` to receive user input from the URL.
  - Generate random numbers using `rand()` to simulate the computer’s choice.

---

### Lab 18 – PHP Programs

Develop PHP scripts for the following:

- Find the **sum of individual digits** of a number.
- Check whether a number is **palindrome** or not.
- Display:
  - Current **date**
  - Current **time**
  - A **delay** (e.g., using `sleep()` to demonstrate delayed output)

---

### Lab 19 – PHP Authentication System

Create a PHP login system.

Requirements:

- **Connect** PHP with a MySQL database.
- **Implement** user authentication:
  - Verify username and password from the database.
  - Use sessions to manage login state.
- **Create** the following pages:
  - Login
  - User dashboard
  - Edit user information
  - Logout
- **Implement** CRUD operations:
  - Create
  - Read
  - Update
  - Delete

---

### Lab 20 – PHP Sessions and Cookies

Develop a set of PHP pages that demonstrate sessions and cookies.

Requirements:

- Create a **login form** that asks for a username.
- On successful "login":
  - Start a **session** and store the username in a session variable.
  - Set a **cookie** to remember the user's preferred background color.
- On a **welcome/dashboard** page:
  - Display the logged-in username from the **session**.
  - Apply the background color stored in the **cookie**.
- Create a **logout** page that:
  - Destroys the session.
  - Expires/deletes the cookie.

---

### Lab 21 – AJAX with PHP

Retrieve server data using **AJAX with PHP**.

Create a webpage that:

- Uses **AJAX** to send a request.
- Fetches data from a **PHP server**.
- Displays the data dynamically in the webpage.

---

### Lab 22 – XML and XSL

Create an XML file containing a list of books.

Define elements such as:

- **Title**
- **Author**
- **Price**
- **ISBN**

Requirements:

- **Create** an XSL stylesheet to transform XML into HTML.
- **Display** the XML data as a formatted table using XSLT.

---

### Lab 23 – XML with External DTD

Write an XML document with an **external DTD**.

Requirements:

- Root element: `note`
- Child elements:
  - `to`
  - `from`
  - `heading`
  - `body`

---

### Lab 24 – XML with XML Schema (XSD)

Write an XML document with an **external XML Schema (XSD)**.

Requirements:

- Root element: `note`
- Child elements:
  - `to`
  - `from`
  - `heading`
  - `body`

---

### Lab 25 – XML User Information with PHP

Create an XML document that contains **10 users' information**.

Write a PHP program that:

- Takes **User ID** as input.
- Retrieves the user details from the XML document.

Use either:

- **DOM Parser**, or
- **SAX Parser**
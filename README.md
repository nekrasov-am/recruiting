# PHP Back- and Front-End Application Development Test

Hey there! Thanks for considering working as a PHP and Front End developer for <a href="https://www.ekstralys.no">Ekstralys</a>.

## Short intro to Ekstralys

Ekstralys has traded since 2009 and is the premier online supplier of LED lighting to
consumers, car dealers, garages and more.

In September 2017 we changed the whole infrastructure of the company. We moved from a
proprietary e-commerce platform owned by a single vendor to Magento 1.9.

We also moved from a client/server Windows ERP package to an <a href="http://visma.net">online service</a> which has a set of published <a href="https://integration.visma.net/API-index/">APIs</a>.

## Why this test?

Due to the proliferation of contractors with barely any skills portraying themselves as
PHP and OOP experts, we had to find a way to pre-qualify applicants.

The only sensible way to do that is to include a test as part of the application process.

## The job

We are hiring a PHP developer for the long term. We are thinking years, not months or weeks.

Initially the work will be 40 hours a week.

Later, when the application is much more complete, it will be
maintenance and smaller projects. We also anticipate moving to Magento 2 at some stage,
which would require significantly more development for a period of time.

The work is primarily back-end. If you are able to help with front-end HTML and CSS for
the site itself - fantastic!

Technologies include:
- PHP 7
- MySQL
- Slim Framework (standard OOP MVC framework)
- Smarty templating system
- jQuery
- Vue.js
- Git
- Composer
- HTML/CSS
- Task tracking system (Teamwork.com)
- Issue tracking through Github

## Working hours

At minimum you need to be able to cover the core hours from 09:00 to 15:00,
Europe/Oslo.

## The task

Create a small application to allow a user to add notes to individual records in a table.

- Bear in mind our technology list above. We prefer PHP 7.1 over PHP 7.
- Use the new features of PHP 7/7.1 where possible and appropriate.
- Use Bootstrap 4 beta 2 as your starting stylesheet
- Use an MVC structure
- Use either Eloquent or Aura/SQL
- Create INSTALL.md with full installation instructions, step by step.

The basis for the data is as follows:
 - order_id - Integer
 - sku - string, 50 characters
 - description - string, 250 characters
 - notes, a single field to store individual notes from the user

Functionality
 - A "note" is a comment from a user, stored in the "notes" field.
 - There can be several notes, all stored in the same field in the database.
 - Display records from the DB using DataTables
 - Indicate through an icon if notes exists for a particular record
 - Find a way to display the notes in a balloon when hovering somewhere on the record
   - Explain why and/or how you chose your solution
 - Use an icon to allow user to delete all comments from a record.
 - When clicking an "add" icon, create a modal that allows the user to enter more information.
   - Note:
     - All notes are stored in a single field.
     - Previous notes should be immutable; they cannot be changed or removed.
     - User is required to enter their initials and the note text.
     - When the modal is closed, the information in the datatable should be refreshed without a page reload.

## What we are looking for

Ok, so the programming task is a test of your abilities. Not just as a coder, but as a
person who can deliver a solution that can be used.

We do use this test to highlight those contractors who can deliver, and leave those
who cannot deliver far behind. 

So here's what we are looking at:

- How you deal with encodings and charsets
- How clean your code looks
- How well you have commented your code
- How you organize your code according to the MVC structure
- Your use of new features of PHP 7/7.1
- Are the instructions for the task correct? Did you interpret them correctly?
- Your adherence to our technology list, and if you have chosen something else, your reasons why
- Note: using Smarty is optional. Using Twig instead of Smarty will beg the question, "why?"

And most importantly - there are many elements that have been left to YOUR CHOICE.

A big part of the assessment is your ability to use your knowledge to deliver a
usable solution. Basically, use sensible defaults. Protect against user error.
Cover against all sensible error conditions.

You must fork or clone this repo.

When you have spent 1 hour of what you consider to be billable time on the project,
commit all code to Github and create a tag with "1hour".

Make sure we have the URL for your repo.

For each additional 2 hours of working time you spend on the project, commit the
code and add a corresponding tag, e.g. "3hours", "5hours" etc.

## If your solution is incomplete

We get that you might not want to spend 20+ hours on a recruitment test. If you do not
finish the project, but have reached your limit, please explain what is left to do and
how you would do it, and notify us that you consider the project completed.

Also please let us know how much time you spent on the project, in total.

# Good luck!
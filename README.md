# Laravel Post Management

This repository contains a Laravel application for managing posts with a set of tasks to complete.


8. Access your application in your web browser at `http://localhost:8000`.

## Deployment to Production

For deploying to a production environment, you may need additional configurations and optimizations, including setting up a web server like Nginx or Apache, configuring the `.env` file for production, and using tools like Laravel Forge or Envoyer. Consult Laravel's official documentation for production deployment.

**Note:** Remember to follow best practices, including proper code organization, commenting, and error handling. Feel free to use any online resources or the Laravel documentation while completing the tasks.

Good luck with the test! If you have any questions, don't hesitate to ask. Happy coding!


## Task 1: Set Up

1. Create a New Laravel Application.
2. Initialize git in it.
3. Create a new branch in the repository with your name "your_name" to work on your solutions.
4. After completing each task, commit your changes with clear messages.

## Task 2: Post Management

- Create a new database table named "posts" with the following columns:
  - id (primary key, auto-increment)
  - title (string)
  - content (text)
  - created_at (timestamp)
  - updated_at (timestamp)
- Create a model named "Post" for the "posts" table.
- Implement a migration to create the "posts" table and run it.

## Task 3: Create and Display Posts

- Create a new controller named "PostController".
- Define methods in "PostController" to handle the following:
  - Display a form to create a new post (GET request).
  - Store the submitted post data in the database (POST request).
  - Display all posts in a paginated manner (GET request).
- Create corresponding views for each of the methods in the "resources/views/posts" folder.

## Task 4: Edit and Delete Posts

- Extend the "PostController" to include methods for the following:
  - Edit a post (GET request): Display a form to edit the title and content of a specific post.
  - Update a post (PUT/PATCH request): Update the post data in the database based on the form submission.
  - Delete a post (DELETE request): Remove the selected post from the database.
- Add corresponding views for the edit and delete methods.

## Task 5: Front-end Styling

- Use Bootstrap CSS to style the forms and tables on the views.
- Make the post listing table responsive and visually appealing.

## Task 6: Relationship

- If you feel confident in your skills, add a one-to-many relationship between "Post" and "Comment" models. A "Post" can have multiple comments, and each comment belongs to a single post.
- Create a new database table named "comments" with columns for "id", "post_id" (foreign key), "author_name", and "content".
- Define the relationship between the "Post" and "Comment" models.
- Implement the necessary controller methods and views to display comments for each post.

## Submission Instructions

1. Ensure you have committed all your changes to your "your_name" branch.
2. Push the branch to the remote repository.
3. Optionally, push the branch to a remote repository like GitHub.
4. Send me your remote public repository link or zip the project and send it.

**Note:** Remember to follow best practices, including proper code organization, commenting, and error handling. Feel free to use any online resources or the Laravel documentation while completing the tasks.

Good luck with the test! If you have any questions, don't hesitate to ask. Happy coding!

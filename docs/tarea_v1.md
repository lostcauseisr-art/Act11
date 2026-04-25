

Guys, this week's activity consists of creating an authentication system using the Laravel Breeze package. You should:

1.Install the Breeze package in a brand-new Laravel project.
2.Add a new column to the "users" table. This should be a boolean column to indicate whether the user is an admin.
3.Create a new view protected by the "auth" middleware.
4.Check if the user is an admin; if they are not, return a 403 error on this new view.
5.Create a new layout using Blade with two dynamic sections: "content" and "logo".
6.Create two more views that use this new Blade layout.
7.Insert different content into both views within the "content" and "logo" sections.
8.Create a couple of Blade components: one for the section title and another for a dynamic button.
9.Use props to edit the title and a slot to edit the button's content.
10.Use both components in the views that use the new Blade layout.

Create a brand-new GitHub repository and upload the public link to Activity 11.
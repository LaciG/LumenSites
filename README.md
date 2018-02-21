# Auth0

This is what we need the API to do:

Get all authors.
Get one author.
Add a new author.
Edit an author.
Delete an author.

Let's flesh out the possible endpoints for this API. Given some authors resource, we'll have the following endpoints:

Get all authors - GET /api/authors
Get one author - GET /api/authors/23
Create an author - POST /api/authors
Edit an author - PUT /api/authors/23
Delete an author - DELETE /api/authors/23

What will be the author attributes? Let's flesh it out like we did the endpoints.

Author: name, email, twitter, github, location, and latest_article_published.

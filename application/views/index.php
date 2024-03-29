<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dota Survey</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style_Survey.css" />
  </head>
  <body>
    <h1 id="title">Dota Survey Form</h1>
    <p id="description">Please fill the form, thank you.</p>

    <form id="survey-form">
    <form action="<?php echo base_url(); ?>admin/survey" enctype="multipart/form-data" method="post">
      <label for="name" id="name-label">
        Name
        <input type="text" id="name" placeholder="Enter your name" required />
      </label>

      <label for="email" id="email-label">
        Email
        <input type="email" id="email" placeholder="Enter your email" required />
      </label>

      <label for="number" id="number-label">
        Age
        <input type="number" id="number" placeholder="How old are you?" min="5" max="80" />
      </label>

      <label for="gender" id="gender-label"> What gender are you? </label>

      <input type="radio" name="gender" value="1" checked /> Male <br />
      <input type="radio" name="gender" value="2" /> Female <br />
      <input type="radio" name="gender" value="3" /> Undisclosed <br />
      <input type="radio" name="gender" value="4" /> Other <br />
      <br /><br />

      <label for="favorite_hero" id="favorite_hero-label">
        What is your favourite hero in Dota?
        <input type="text" id="favorite_hero" placeholder="Enter your favorite_hero" required />
      </label>

      <label for="dropdown" id="dropdown-label">
        How do you know Dota?
        <select id="dropdown">
          <option>Friends</option>
          <option>Instagram</option>
          <option>Facebook</option>
          <option>Kaskus</option>
          <option>Twitter</option>
          <option>Steam</option>
        </select>
      </label>

      <br />
      <label for="dota" id="dota-label"> Please choose your favorite Dota game? </label>

      <input type="checkbox" value="cry-for-me" /> Defense of the Ancients <br />
      <input type="checkbox" value="eyes-wide-open" /> Dota 2 <br />
      <input type="checkbox" value="more-and-more" /> Dota Underlords <br />
      <input type="checkbox" value="feel-special" /> Artifact <br />

      <br /><br />

      <label for="comments" id="comments-label">
        Any comments or suggestions?
        <textarea id="comments" cols="30" rows="10"></textarea>
      </label>

      <button id="submit" type="submit">Submit</button>
    </form>

  </body>
</html>

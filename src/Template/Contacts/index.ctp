<div class="gap-50"></div>
  <div class="wrapped">
    <h2 class="center" style="color:#616161">Contact Form</h2>
    <div class="gap-20"></div>
    <div class="row">
    <form class="col s12" method="post" action="/Contacts/submit">
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <input id="first_name" name="name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
          <label for="textarea1">Your Message</label>
        </div>
      </div>
      <button type="submit" class="waves-effect waves-light btn-large red darken-2" style="width:100%;height:100%">Submit</button>
    </form>
  </div>
</div>
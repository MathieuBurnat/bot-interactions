class Bot {
  constructor(userData) {
    //Get user's data
    this.lastName = userData.lastName;
    this.firstName = userData.firstName;
    this.old = userData.old;

    this.prepareIntro();
  }

  prepareIntro(){
    // Create messages
    this.introMessage = "Hey " + this.firstName + ", haven't you " + this.old + " years old ? This is THE moment for you to buy a beautiful and fresh cactus !";
    this.calmMessage = "Do you know that plants could lowers the levels of anxiety and increases the productivity ?"

    // Create the image
    this.introImage = [{
        "type" : "image",
        "rawUrl": "https://cdn.dribbble.com/users/203287/screenshots/4389638/cacti2.gif"
    }];
  }

  test() {
    // Send content via the chatbox
    const dfMessenger = document.querySelector('df-messenger');
    dfMessenger.renderCustomCard(this.introImage);
    dfMessenger.renderCustomText(this.introMessage);
    dfMessenger.renderCustomText(this.calmMessage);

    dfMessenger.expand = true;
  }
}

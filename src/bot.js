class Bot {
  constructor(lastName, firstName, old) {
    this.lastName = lastName;
    this.firstName = firstName;
    this.old = old;
  }

  test() {
    // Create messages
    const introMessage = "Hey " + this.firstName + ", haven't you " + this.old + " years old ? This is THE moment for you to buy a beautiful and fresh cactus !";
    const calmMessage = "Do you know that plants could lowers the levels of anxiety and increases the productivity ?"

    // Create the image
    const introImage = [{
        "type" : "image",
        "rawUrl": "https://cdn.dribbble.com/users/203287/screenshots/4389638/cacti2.gif"
    }];

    // Send content via the chatbox
    const dfMessenger = document.querySelector('df-messenger');
    dfMessenger.renderCustomCard(introImage);
    dfMessenger.renderCustomText(introMessage);
    dfMessenger.renderCustomText(calmMessage);

    dfMessenger.expand = true;
  }
}

class Bot {
  constructor(userData) {
    //Get user's data
    this.lastName = userData.lastName;
    this.firstName = userData.firstName;
    this.old = userData.old;

    this.dfMessenger = document.querySelector("df-messenger");
    this.createMessages();
  }

  createMessages() {
    this.messages = [];

    // Create image
    const introImage = [
      {
        type: "image",
        rawUrl:
          "https://cdn.dribbble.com/users/203287/screenshots/4389638/cacti2.gif",
      },
    ];

    this.messages.push(new Message(introImage, false));

    // Create this.messages
    this.messages.push(new Message("Hey " + this.firstName + ", haven't you " + this.old + " years old ? This is THE moment for you to buy a beautiful and fresh cactus !", true));
    this.messages.push(new Message("Do you know that plants could lowers the levels of anxiety and increases the productivity ?", true));
  }

  async displayMessages() {
    this.dfMessenger.expand = true;

    // Send content to the chatbox
    for(let i = 0; i < this.messages.length; i++){
      await this.delay(i * 1000);
      this.messages[i].display(this.dfMessenger);
    }
  }

  command(cactusData){
    
    const payload = [
      {
        "type": "button",
        "icon": {
          "type": "chevron_right",
          "color": "#FF9800"
        },
        "text": "Buy cactus",
        "event": {
          "name": "command",
          "parameters": {
            "type" : cactusData.type,
            "amount" : cactusData.amount
          },
          "languageCode": "en",
        }
      }
    ];

    this.dfMessenger.renderCustomCard(payload);
  }

  delay = millis => new Promise((resolve, reject) => {
    setTimeout(_ => resolve(), millis)
  });
}

class Message {
  constructor(payload, isText) {
    this.payload = payload;
    this.isText = isText;
  }

  display(dfMessenger){
      if(this.isText){
        dfMessenger.renderCustomText(this.payload);
      }else{
        dfMessenger.renderCustomCard(this.payload);
      }
  }
}

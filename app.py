from flask import Flask
from datetime import datetime
import pytz

app = Flask(__name__)

@app.route("/")
def hello_world():
    now = datetime.now().astimezone(pytz.timezone("Europe/Warsaw"))
    return f"<h1>Aktualny czas: {now.hour}:{now.minute:0{2}} {now.day}.{now.month}.{now.year}</h1>"

if __name__ == "__main__":
    app.run()

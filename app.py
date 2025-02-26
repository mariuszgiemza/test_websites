from flask import Flask
from datetime import datetime

app = Flask(__name__)

@app.route("/")
def hello_world():
    now = datetime.now()
    return f"<h1><br><br><br>Aplikacja napisana w Pythonie, hostowana w Microsoft Azure. <br><br><br>Dziś jest {now.day}.{now.month}.{now.year}.</h1>"

if __name__ == "__main__":
    app.run()

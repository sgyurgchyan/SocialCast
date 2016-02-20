//find the most recent tweets in the collection.
db.tweets.find().sort({"timestamp": −1});
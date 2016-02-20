//count all of the tweets authored by OccupyWallSt
var query = {"user.screen_name": "OccupyWallSt"};
db.tweets.find(query).count();

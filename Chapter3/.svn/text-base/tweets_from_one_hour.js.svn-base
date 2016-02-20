//count all of the tweets from November 15, 2011 from 10am - 11am.
var NOVEMBER = 10; //Months are zero-indexed.
var query = { 
    "timestamp" : {
        "$gte": +new Date(2011, NOVEMBER, 15, 10), 
        "$lt": +new Date(2011, NOVEMBER, 16, 11) 
    }
};
print(db.tweets.find(query).count() + " tweets were generated on 2011-11-15 between 10am and 11am.");

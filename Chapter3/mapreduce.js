/*
* This function extracts each user mentioned, 
* and the count of each mention. 
* The function takes 0 parameters, as the document 
* will be passed through context (the 'this' object). 
*/
var mapFunction = function(){
    //loop through all of the mentions in the document.
    var userMentions = this.entities.user_mentions;
    for(var i = 0; i < userMentions.length; i++){
        //check that the username is not blank.
        if(userMentions[i].screen_name.length > 0){
            //emit the username (key) and 
            //the count (value, in this case always 1).
            emit(userMentions[i].screen_name, 1);    
        }
    }
};

/*
* This function sums the number of mentions of each user
*/
var reduceFunction = function(keyUsername, occurs){
    return Array.sum(occurs);
}

// Perform the MapReduce operation, and store the results 
// in a new collection, "most_mentioned_users".
db.tweets.mapReduce(mapFunction, reduceFunction, {"out": "most_mentioned_users"});

// List the top 5 most-mentioned users
var result = db.most_mentioned_users.find().sort({"value": -1}).limit(5);

//print the data from the result object.
result.forEach(function(data){
    print(tojson(data));
});

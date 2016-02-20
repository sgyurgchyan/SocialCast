//enumerate each tweet
db.tweets.find().forEach(function(doc){
    //save the time string in Unix time.
    doc.timestamp = +new Date(doc.created_at);
    //reduce the geobox to one point
    doc.geoflag = !!doc.coordinates;
    if(doc.coordinates && doc.coordinates.coordinates){
        doc.location = {"lat": doc.coordinates.coordinates[1], "lng": doc.coordinates.coordinates[0]};
    }
    //save a lowercased version of the screen name
    doc.screen_name_lower = doc.user.screen_name.toLowerCase();
    //save our modifications
    db.tweets.save(doc);
});
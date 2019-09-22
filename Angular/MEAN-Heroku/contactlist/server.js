let express = require('express');

let bodyParser = require('body-parser');

let mongodb = require('mongodb');

let ObjectID = mongodb.ObjectID;

let CONTACTS_COLLECTION = "contacts";

let app = express();

app.use(bodyParser.json());

let db;

mongodb.MongoClient.connect(process.env.MONGODB_URI || "mongodb://localhost:27017/test", function(err,client){
    if(err)
    {
        console.log(err);
        process.exit(1);
    }


    db = client.db();
    console.log("Database connection is ready.");

    let server = app.listen(process.env.PORT || 8080, function(){
        let port = server.address().port;
        console.log("App now running on port : " , port);
    });
});


// CONTACTS API ROUTES

function handleError(res,reason,message,code){
    console.log("ERROR : " + reason);
    res.status(code || 500).json({"error": message});
}

app.get("/api/contacts", function(req, res) {
    db.collection(CONTACTS_COLLECTION).find({}).toArray(function(err, docs) {
      if (err) {
        handleError(res, err.message, "Failed to get contacts.");
      } else {
        res.status(200).json(docs);
      }
    });
  });
  
  app.post("/api/contacts", function(req, res) {
    var newContact = req.body;
    newContact.createDate = new Date();
  
    if (!req.body.name) {
      handleError(res, "Invalid user input", "Must provide a name.", 400);
    } else {
      db.collection(CONTACTS_COLLECTION).insertOne(newContact, function(err, doc) {
        if (err) {
          handleError(res, err.message, "Failed to create new contact.");
        } else {
          res.status(201).json(doc.ops[0]);
        }
      });
    }
  });


app.get("/api/contacts/:id",function (req,res){

});

app.put("/api/contacts/:id",function (req,res){

});

app.delete("/api/contacts/:id",function (req,res){

});
<script>
<link rel="stylesheet" href="login.php">
var firebaseConfig = {
  apiKey: "api-key",
  authDomain: "project-id.firebaseapp.com",
  databaseURL: "https://project-id.firebaseio.com",
  projectId: "project-id",
  storageBucket: "project-id.appspot.com",
  messagingSenderId: "sender-id",
  appID: "app-id",
};

//initialize Firebase
firebase.initializeApp(FirebaseConfig);
var rootref=firebase.database().ref().child("registration");

var databse = rootRef.push();
var postId = database.Key;
</script>
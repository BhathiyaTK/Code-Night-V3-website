// Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyDFkCwdcZao91vp8jSOrhiZxns_IEwyI_0",
    authDomain: "codenight2019-c5be2.firebaseapp.com",
    databaseURL: "https://codenight2019-c5be2.firebaseio.com",
    projectId: "codenight2019-c5be2",
    storageBucket: "codenight2019-c5be2.appspot.com",
    messagingSenderId: "165499201828",
    appId: "1:165499201828:web:745727a4b3085d39bbebb1",
    measurementId: "G-GXTJZSEZFJ"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

var mainObject = firebase.database().ref().child('CodeNight');
var algoHackRef = mainObject.child('Algorithm_Hackthon');

document.getElementById('algoHackRegForm').addEventListener('submit', submitAlgoForm);

function submitAlgoForm(ea) {
    ea.preventDefault();

    var TeamLeadercontactNo = getInputVal('TeamLeaderContactNo');
    var TeamLeaderEmail = getInputVal('TeamLeaderEmail');
    var TeamLeaderName = getInputVal('TeamLeaderName');
    var TeamMember1 = getInputVal('TeamMember1');
    var TeamMember2 = getInputVal('TeamMember2');
    var TeamMember3 = getInputVal('TeamMember3');
    var TeamMember4 = getInputVal('TeamMember4');
    var TeamName = getInputVal('TeamName');

    var connectedRefAlgo = firebase.database().ref(".info/connected");
    connectedRefAlgo.on("value", function(snap) {
        if (snap.val() === true) {
            if ((TeamLeaderContactNo !== "") && (TeamLeaderEmail !== "") && (TeamLeaderName !== "") && (TeamMember1 !== "") && (TeamMember2 !== "") && (TeamMember3 !== "") && (TeamMember4 !== "") && (TeamName !== "")) {
                var refSub = firebase.database().ref("CodeNight/Algorithm_Hackthon/");
                refSub.on("value", function(snapshot) {
                    var emailArr = [];
                    snapshot.forEach(function(childSnapshot) {
                        var childData = childSnapshot.val();
                        var email = childData.TeamLeaderEmail;
                        emailArr.push(email);
                    });
                    if (emailArr.includes(TeamLeaderEmail) === true) {
                        document.getElementById('TeamLeaderEmail').style.borderColor = "#e51616";
                        document.querySelector('#errormsg').style.display = "block";
                        setTimeout(function() {
                            document.querySelector('#errormsg').style.display = "none";
                        }, 5000);
                        console.log("This email already exists in database");
                    } else if (emailArr.includes(TeamLeaderEmail) === false) {
                        saveAlgoTeam(TeamLeadercontactNo, TeamLeaderEmail, TeamLeaderName, TeamMember1, TeamMember2, TeamMember3, TeamMember4, TeamName);
                        window.location.replace('process/success.html');
                    }
                });
            } else {
                console.log("All are required");
            }
        } else {
            window.location.replace('process/error.html');
        }
    });
}

function getInputVal(id) {
    return document.getElementById(id).value;
}

function saveAlgoTeam(TeamLeadercontactNo, TeamLeaderEmail, TeamLeaderName, TeamMember1, TeamMember2, TeamMember3, TeamMember4, TeamName) {
    var newAlgoHackRef = algoHackRef.push();
    newAlgoHackRef.set({
        TeamLeadercontactNo: TeamLeadercontactNo,
        TeamLeaderEmail: TeamLeaderEmail,
        TeamLeaderName: TeamLeaderName,
        TeamMember1: TeamMember1,
        TeamMember2: TeamMember2,
        TeamMember3: TeamMember3,
        TeamMember4: TeamMember4,
        TeamName: TeamName
    });
}
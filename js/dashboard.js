let add = document.querySelector('#add');

let edit = document.querySelector('#edit');
//let deleted = document.querySelector('#delete');
let addcontent = document.querySelector('#add-content');
let addUser = document.querySelector('#createuser');


let editcontent = document.querySelector('#edit-content');
//let deletecontent = document.querySelector('#delete-content');
let addUserContent = document.querySelector('#create-user-content');


add.addEventListener('click', function(){
    addcontent.style.display = "block";
    add.style.backgroundColor = "#cd2a30";
    //deleted.style.backgroundColor = "";
    edit.style.backgroundColor = "";
    addUser.style.backgroundColor = "";
    //deletecontent.style.display = "none";
    editcontent.style.display = "none";
    addUserContent.style.display = "none";
})
edit.addEventListener('click', function(){
    editcontent.style.display = "block";
    edit.style.backgroundColor = "#cd2a30";
   //deleted.style.backgroundColor = "";
    add.style.backgroundColor = "inherit";
    addUser.style.backgroundColor = "";
    //deletecontent.style.display = "none";
    addcontent.style.display = "none";
    addUserContent.style.display = "none";
})
/*
deleted.addEventListener('click', function(){
    deletecontent.style.display = "block";
    deleted.style.backgroundColor = "#cd2a30";
    edit.style.backgroundColor = "";
    add.style.backgroundColor = "";
    addUser.style.backgroundColor = "";
    addcontent.style.display = "none";
    editcontent.style.display = "none";
    addUserContent.style.display = "none";
})*/
addUser.addEventListener('click', function(){
    addUserContent.style.display = "block";
    addUser.style.backgroundColor = "#cd2a30";
    edit.style.backgroundColor = "";
    //deleted.style.backgroundColor = "";
    add.style.backgroundColor = "inherit";
    addcontent.style.display = "none";
    editcontent.style.display = "none";
    //deletecontent.style.display = "none";
})

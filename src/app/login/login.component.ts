import { Component, OnInit } from '@angular/core';
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  email!: string;
  password!: string;

  constructor() { }
  
  ngOnInit(): void {
  }

  loginuser(){
    if (this.email! == "vijaykumarmr005@gmail.com" && this.password! == "123456") {
      window.location.href= '/admin';
      alert("welcome")
    }
    else{
      alert("incorrect email or password")
    }
  }
  

}

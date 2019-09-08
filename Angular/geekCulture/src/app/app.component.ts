import { Component, OnInit } from '@angular/core';
import { element } from 'protractor';
import { resolve } from 'path';
import { reject } from 'q';
import { AppareilService } from './services/appareil.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent implements OnInit {
  
  title = 'geekCulture';
  
  isAuth = false;

  appareils: any[];

  lastUpdate = new Promise((resolve,reject) => {

    const date = new Date();

    setTimeout(
      () => {
        resolve(date)
      },2000
    );

  });

  constructor(private AppareilService: AppareilService){
    setTimeout(() => {
        this.isAuth = true;
    },5000)
  }

  ngOnInit(){
    this.appareils = this.AppareilService.appareils
  }

  onFire(){
    this.AppareilService.switchOnAll();
  }
  onShutdown(){
    this.AppareilService.switchOffAll();
  }

}

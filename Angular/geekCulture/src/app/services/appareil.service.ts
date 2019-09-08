export class AppareilService  {

    appareils = [
        {
          name: 'Machine à lave',
          status : 'Off'
    
        },
        {
          name: 'Frigo',
          status: 'On'
    
        },
        {
          name: 'Ordinateur',
          status: 'Off'
    
        }
      ];

      switchOnOne(i: number)
      {
        this.appareils[i].status = "On";
      }

      switchOffOne(i: number)
      {
        this.appareils[i].status = "Off";
      }

      switchOnAll(){
        for(let appareil of this.appareils)
        {
          appareil.status = "On";
        }
      }

      switchOffAll(){
        for(let appareil of this.appareils)
       {
          appareil.status = "Off";  
       }
      }

}
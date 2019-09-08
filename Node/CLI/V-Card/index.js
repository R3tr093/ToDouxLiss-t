#!/usr/bin/env node


// modules
var Multispinner = require('multispinner');
const figures = require('figures')
const chalk = require('chalk');
const warningLog = chalk.keyword('orange');
const basicLog = chalk.hex('#DEADED').bold;
const log = console.log;

var clear = require('clear');





process.stdout.columns = 204;

console.log(warningLog(process.stdout.columns));

log()
log(chalk`          {bgWhite.red.bold  ☠  ☠  ☠   ! --- > Prepare V-Card < ---- !   ☠  ☠  ☠ }`);
log()

// constants
const spinners = ['Awaiting response ... ', ' Looking for License ... ', ' Prepare V-Card ... ']
const opts = {
  'interval': 120,
  'preText': 'Completing -- >',
  'frames': [
    basicLog('[    ☺                            ]'),
  warningLog('[      ☠                          ]'),
    basicLog('[         ☺                       ]'),
  warningLog('[            ☠                    ]'),
    basicLog('[               ☺                 ]'),
  warningLog('[                  ☠              ]'),
    basicLog('[                     ☺           ]'),
  warningLog('[                        ☠        ]'),
    basicLog('[                           ☺     ]'),
  warningLog('[                        ☠        ]'),
    basicLog('[                     ☺           ]'),
  warningLog('[                  ☠              ]'),
    basicLog('[               ☺                 ]'),
  warningLog('[            ☠                    ]'),
    basicLog('[         ☺                       ]'),
  warningLog('[      ☠                          ]'),
    basicLog('[   ☺                             ]')


  ],
  'symbol': {
    'success': ' '.repeat(7) + figures.smiley,
    'error': ' '.repeat(7) + figures.warning
  }
}

// initialize
const m = new Multispinner(spinners, opts)


// staggered completion
const t = 1500
let i = 0
function loop() {
  setTimeout(() => {
    
    
    
    if( i % 2 === 0)
    {
        m.success(spinners[i])
        
    }  

     

    else
    {
        m.error(spinners[i])
    }

    i++;

    setTimeout(function(){
        if (i < spinners.length) loop()
    },2000)

    setTimeout(function(){
        if (i === spinners.length) 
        {
          clear();
          displayCard();
        }
    },2000)


    
  }, t)
}




// V-Card
function displayCard ()
{
    const boxen = require('boxen');

    log();
    log();
   
    log(warningLog("                      --++---++-++-++---++---+--++-    ☣☣☣  ☠  ☣☣☣   -++---++---++---++---+++-++--"));
      log(basicLog("                      +                                                                          +"));
    log(warningLog("                      +                             © Mossiat Jeoffrey                           +"));
      log(basicLog("                      ☆                                                                          ☆"));
    log(warningLog("                      +            🦊          ∞   Open Source Developer    ∞                    +"));
      log(basicLog("                      +                                                                          +"));
    log(warningLog("                      +            👉  NPM     :   https://www.npmjs.com/~hamilton19             +"));
      log(basicLog("                      ☆                                                                          ☆"));
      log(basicLog("                      ☆            👉  GitHub  :   https://github.com/R3tr093                    ☆"));
      log(basicLog("                      +                                                                          +"));
    log(warningLog("                      +            👉  Web     :   https://www.R3tr0.eu                          +"));
      log(basicLog("                      ☆                                                                          ☆"));
    log(warningLog("                      +            💌  Mail    :   mossiat.jeoffrey@outlook.com                  +"));
      log(basicLog("                      +                                                                          +"));
    log(warningLog("                      +            💌  Card    :   npx hamilton19                                +"));
      log(basicLog("                      ☆                                                                          ☆"));
    log(warningLog("                      +                                                                          +"));
    log(warningLog("                      +                                                                          +"));
      log(basicLog("                      --++---++-++-++---++---+--++-    ☣☣☣  ☠  ☣☣☣    -++---++---++---++---+++-++-"));

      
    log();
    log();
    log();
    log(chalk`                         {bgWhite.red.bold ❤  ❤  ❤   knowledges has value only if it can be shared.  ❤  ❤  ❤ }`);
    log();
    log();



}





const run = async () => {
    
    // Start fake loading, and then the loop start the v-card.
    loop();

    

   

 
   
    

};
  
  run();
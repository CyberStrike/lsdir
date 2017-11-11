const fs = require('fs');
const dir = './sample/';
fs.readdir(dir, (err, files) => {
  files.forEach( file => {
    console.log(file);
  });
})

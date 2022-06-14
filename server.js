const express = require('express');
const app = express()
const port = 3000;


var http = require('http').createServer(app)
app.get('/',  (req, res) => {
    res.send({messsage: "It is working"})
})

app.get('/test', (req, res)=> {
    res.send("this is a test page")
})


http.listen(port, () => {
    console.log(`server running... ${port}`)
  })


module.exports = app;

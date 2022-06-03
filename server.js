const express = require('express');
const app = express()
const port = 8000;

app.get('/',  (req, res) => {
    res.send({messsage: "It is working"})
})

app.get('/test', (req, res)=> {
    res.send("this is a test page")
})


app.listen(port, () => {
    console.log(`server running... ${port}`)
  })


module.exports = app;
import React from 'react';
import {BrowserRouter as Router,Route, Switch} from "react-router-dom"
import Lists from "./Pages/Lists"
import Page404 from "./Pages/Page404"
import Public from './Routes/Public'

const App =() =>(
  <Router>

    
    <Switch>
     
   
   <Public path="/lists" exact component={Lists}/>
   <Route component={Page404}/>
   
    </Switch>
  </Router>
 ) 

export default App;

import React,{ useEffect } from 'react'
import Card from '../Organisms/Card';
import store from '../../redux/store';
import { getAllLists } from '../../redux/actionCreators';
import { connect } from 'react-redux';
const Lists = ({match,lists}) => {
 useEffect(()=>{
  store.dispatch(getAllLists())
  },[match])
return (
<>

{
lists && 

<main className="ed-grid m-grid-3 lg-grid-4 row-gap">
    {

      lists.map(l =>(
      <Card
      path="lista"
      picture={l.picture}
      name={l.name}
      key={l.id}
      cardId={l.id}
     
      
      />
        
      ))
    }
  
</main>

}
</>
    )

}

const mapStateToProps  = state =>({
   lists: state.listReducer.lists
})

export default connect(mapStateToProps,{}) (Lists)

import {GET_ALL_LISTS
  
      } from "./actions";

      export const listReducer =(state ={},action )=>{
 
        if(action.type === GET_ALL_LISTS){
          return {
            ...state,
           lists: action.lists
                 }
          }
         return state
       }

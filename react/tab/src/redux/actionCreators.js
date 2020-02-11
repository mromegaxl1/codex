import Axios from "axios";
import {
  GET_ALL_LISTS
}from "./actions";



const API_URL = process.env.REACT_APP_API_URL



export const getAllLists = () => dispatch=>{
  Axios.get(`${API_URL}/listas`).then(
    resp => {
      return dispatch({
        type:GET_ALL_LISTS,
        lists : resp.data
      })
    }
  )
}

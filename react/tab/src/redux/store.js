import {createStore, combineReducers, applyMiddleware} from "redux"
import {composeWithDevTools} from "redux-devtools-extension"
import thunk from "redux-thunk"
import {
   listReducer
  } from "./reducers"

export default createStore(
  combineReducers({
    listReducer
  }),
 composeWithDevTools(applyMiddleware(thunk))
)

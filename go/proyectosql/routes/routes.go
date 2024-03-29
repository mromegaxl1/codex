package routes

import "github.com/gorilla/mux"

// InitRoutes inicia las rutas
func InitRoutes() *mux.Router {
	router := mux.NewRouter().StrictSlash(false)
	SetCis10Router(router)
	SetPublicRouter(router)
	return router
}

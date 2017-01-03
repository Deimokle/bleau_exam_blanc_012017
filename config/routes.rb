Rails.application.routes.draw do
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
  root to: 'main#index'

  get 'search' => 'main#search', as: :search
  get 'algo' => 'main#algo', as: :algo
  get 'exo1' => 'main#exo1', as: :exo1
  get 'exo2' => 'main#exo2', as: :exo2
end

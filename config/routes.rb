Rails.application.routes.draw do
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html

  root "blogs#opening"

  resources :blogs do
    collection do
      get 'opening'
      get 'list'
    end
  end

end

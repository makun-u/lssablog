class BlogsController < ApplicationController

  def opening
  end

  def index
    @blogs = Blog.all.page(params[:page]).per(5).order('id DESC')
  end

  def new
    @blog = Blog.new
  end

  def create
    Blog.create(create_params)
    redirect_to '/blogs'
  end

  def edit
  end

  def update
  end

  def destroy
  end

  def show
    @blog = Blog.find(params[:id])
  end

  def list
    @blogs = Blog.all.page(params[:page]).per(10).order('id ASC')
  end

  private
  def create_params
    params.require(:blog).permit(:title, :sentence)
  end
end

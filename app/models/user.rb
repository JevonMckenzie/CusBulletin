class User < ApplicationRecord
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable, :trackable and :omniauthable
  devise :database_authenticatable, :registerable,
         :recoverable, :rememberable, :validatable

  has_many :supports, dependent: :destroy
  has_many :rsupports
  has_many :toners, dependent: :destroy

  def username
      return self.email.split('@')[0].capitalize
  end

end

class Toner < ApplicationRecord
	belongs_to :user, optional: true
	validates :username, :tonername, :quantity, :sectionname, :requestdate, :presence => true
end

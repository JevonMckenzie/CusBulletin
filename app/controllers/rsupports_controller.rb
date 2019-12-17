class RsupportsController < ApplicationController
	
	def new
	   @rsupport = Rsupport.new
	end	

	def index
	   @rsupports = Rsupport.all
        end

	def create
          @support = Support.find(params[:support_id])
          @rsupport = @support.rsupports.build(rsupports_params)
          @rsupport.user = current_user
          @rsupport.save

          redirect_to supports_url

        end

         def destroy
           @support = Support.find(params[:support_id])
           @rsupport = @support.rsupport.find(params[:id]).destroy
          
           redirect_to rsupports_url

         end

       private
         def rsupports_params
		params.require(:rsupport).permit(:description)
	end


end
